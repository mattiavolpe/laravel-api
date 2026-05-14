## 2024-05-24 - Avoid loading entire Eloquent collections into memory
**Learning:** Using `count(Model::where(...)->get()->toArray())` or `Auth::user()->projects()->get()` to perform aggregates or finding the first/last item is extremely memory inefficient, as it fetches the entire collection of models into PHP memory.
**Action:** Always use efficient database-level query builder methods like `count()`, `exists()`, `first()`, and `orderBy()->first()` directly on the query builder instead of loading results into memory.
