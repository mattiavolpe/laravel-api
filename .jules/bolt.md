## 2024-08-05 - Avoid pulling Eloquent collections into memory for count checks
**Learning:** This codebase frequently used count(Model::where(...)->get()->toArray()) to check for existence or specific counts, which unnecessarily hydrates full Eloquent models and arrays in PHP memory.
**Action:** Always use ->exists() for > 0 checks and ->count() for specific count checks to execute queries directly at the database level and prevent memory exhaustion.
