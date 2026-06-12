## 2024-05-24 - Optimize Eloquent Exists and Count Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` is a severe performance anti-pattern. It executes a `SELECT *` query, loads all matching records into PHP memory as Eloquent models, and then converts the entire collection to an array just to count the items.
**Action:** Replace `count(...->get()->toArray()) > 0` with `->exists()` and `> 1` with `->count() > 1` to perform the counting/existence checks at the database level.
