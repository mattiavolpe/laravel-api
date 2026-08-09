## 2024-08-09 - Inefficient Eloquent Counting Pattern
**Learning:** The codebase has an anti-pattern of using `count(Model::where(...)->get()->toArray())` for counting or existence checks in controllers (e.g., for slug validation), which unnecessarily loads all matched records into PHP memory.
**Action:** Always execute count and existence checks directly at the database level using `->exists()` and `->count()` to avoid PHP memory exhaustion and optimize performance.
