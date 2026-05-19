## 2024-05-24 - Eloquent Collection Memory Leaks
**Learning:** Checking existence or counting models using `count(Model::where(...)->get()->toArray())` or fetching an entire relationship just to get the first/last item (`Auth::user()->projects()->get()`) loads all records into PHP memory, causing massive memory overhead as tables grow.
**Action:** Always use database-level aggregates and limits (like `->count()`, `->exists()`, `->latest()->first()`) to avoid loading large datasets into memory, and invoke relationship methods afresh for each query to avoid query builder mutations.
