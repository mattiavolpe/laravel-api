## 2024-10-13 - Avoid memory exhaustion in Eloquent existence checks
**Learning:** This codebase incorrectly uses `count(Model::where(...)->get()->toArray())` to check for record existence or count. This is a severe anti-pattern as it pulls the entire collection into PHP memory, converting to an array, just to count it.
**Action:** Always use database-level queries like `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and prevent memory exhaustion.
