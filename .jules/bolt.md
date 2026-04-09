## 2024-04-09 - Avoid In-Memory Array Counting in Laravel
**Learning:** Loading Eloquent models into a collection and converting them to an array just to count them (e.g., `count(Model::where(...)->get()->toArray())`) is extremely inefficient and can cause memory exhaustion on large datasets.
**Action:** Always use database-level aggregates like `exists()` for simple existence checks or `count()` directly on the query builder to minimize memory usage and maximize speed.

## 2024-04-09 - Avoid Loading Unnecessary Related Models
**Learning:** Avoid using `Auth::user()->projects()->get()` to perform aggregate tasks such as finding the total count, newest, or oldest project in PHP. This loads all related models into memory.
**Action:** Chain aggregate methods directly on the relationship query builder, such as `Auth::user()->projects()->count()`, `Auth::user()->projects()->latest('id')->first()`, and `Auth::user()->projects()->oldest('id')->first()`, so the database performs the heavy lifting.
