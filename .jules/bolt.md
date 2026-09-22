## 2024-05-18 - Eloquent Memory Exhaustion Anti-Pattern
**Learning:** Found a codebase-specific anti-pattern where developers check for record existence or count by pulling entire collections into PHP memory using `count(Model::where(...)->get()->toArray())`. This wastes memory and execution time since it downloads all columns of all matching rows into an array simply to count them.
**Action:** Always replace these with database-level queries (`->exists()` for `> 0`, and `->count()` for specific thresholds) to keep the optimization at the SQL level.
