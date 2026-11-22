import os
from pathlib import Path

SOURCE_FOLDER = Path("ai-prompt-folder")
OUTPUT_FILE = Path("ai_prompt_files.txt")


def build_directory_tree(root_dir: Path) -> str:
    lines = [f"{root_dir.name}/"]

    def walk(current_dir: Path, prefix: str = ""):
        entries = sorted(
            current_dir.iterdir(),
            key=lambda p: (not p.is_dir(), p.name.lower())
        )
        for index, entry in enumerate(entries):
            is_last = index == len(entries) - 1
            connector = "└── " if is_last else "├── "
            display_name = f"{entry.name}/" if entry.is_dir() else entry.name
            lines.append(f"{prefix}{connector}{display_name}")

            if entry.is_dir():
                extension = "    " if is_last else "│   "
                walk(entry, prefix + extension)

    walk(root_dir)
    return "\n".join(lines)


def collect_files(root_dir: Path) -> list[Path]:
    files = []
    for dirpath, dirnames, filenames in os.walk(root_dir):
        dirnames.sort(key=str.lower)
        filenames.sort(key=str.lower)
        for filename in filenames:
            files.append(Path(dirpath) / filename)
    return files


def main():
    if not SOURCE_FOLDER.exists() or not SOURCE_FOLDER.is_dir():
        raise FileNotFoundError(f"Folder not found: {SOURCE_FOLDER.resolve()}")

    tree = build_directory_tree(SOURCE_FOLDER)
    files = collect_files(SOURCE_FOLDER)

    quoted_blocks = []
    for file_path in files:
        relative_path = file_path.relative_to(SOURCE_FOLDER).as_posix()
        try:
            content = file_path.read_text(encoding="utf-8")
        except UnicodeDecodeError:
            content = file_path.read_text(encoding="utf-8", errors="replace")

        block = f'"=== FILE: {relative_path} ===\n{content}"'
        quoted_blocks.append(block)

    output_text = (
        "DIRECTORY STRUCTURE:\n"
        f"{tree}\n\n"
        "FILE CONTENTS:\n"
        + ",\n".join(quoted_blocks)
    )

    OUTPUT_FILE.write_text(output_text, encoding="utf-8")
    print(f"Done! Bundled {len(files)} files into {OUTPUT_FILE.resolve()}")


if __name__ == "__main__":
    main()