## 2024-09-27 - Eloquent count() Performance
**Learning:** Pulling full collections into PHP memory using `count(Model::where(...)->get()->toArray())` is a huge performance anti-pattern. This pulls entire datasets into memory just to count them.
**Action:** Use database-level `exists()` (for `> 0`) or `count()` (for exact counts or `> 1`) instead.
