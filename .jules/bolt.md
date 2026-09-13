## 2024-05-24 - Eloquent Performance Optimization
**Learning:** Loading entire collections into PHP memory using `count(Model::where(...)->get()->toArray())` or fetching all records with `->get()` just to access the first/last elements is highly inefficient and scales poorly.
**Action:** Always use database-level methods like `->count()`, `->exists()`, `->latest('id')->first()`, and `->oldest('id')->first()` to perform counting, existence checks, and edge-item retrieval directly in the database engine.
