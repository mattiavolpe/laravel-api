## 2024-09-09 - Avoid PHP Memory Counting

**Learning:** Loading entire Eloquent collections into PHP memory via `count(Model::where(...)->get()->toArray())` just to check existence or count is highly inefficient and risks memory exhaustion.

**Action:** Execute queries directly at the database level. Use `->exists()` for `> 0` checks, and `->count()` for specific count checks like `> 1`.
