## 2024-05-24 - Eloquent Collection Count Optimization
**Learning:** Checking for record existence using `count(Model::where(...)->get()->toArray())` is a severe performance bottleneck. It executes a query that retrieves all matching rows from the database, hydrates Eloquent models for each row, converts the entire collection to a PHP array, and only then counts the items in memory. This wastes memory and processing time.
**Action:** Replace `count(Model::where(...)->get()->toArray()) > 0` with `Model::where(...)->exists()` and `count(Model::where(...)->get()->toArray()) > 1` with `Model::where(...)->count() > 1` (or similarly optimized queries).

## 2024-05-24 - Efficient Record Counting in Collections
**Learning:** Using `count($collection)` where `$collection = Auth::user()->projects()->get()` loads all related models into memory just to count them.
**Action:** Use `Auth::user()->projects()->count()` directly to execute a fast `SELECT COUNT(*)` query at the database level.
