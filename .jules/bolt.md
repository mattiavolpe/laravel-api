## 2024-09-10 - Inefficient Eloquent Count Anti-Pattern
**Learning:** Found a codebase-specific anti-pattern where models are retrieved, loaded entirely into memory as arrays, and then counted (e.g., `count(Model::where(...)->get()->toArray())` > 0). This exhausts memory on large tables and drastically slows down requests.
**Action:** Always use database-level methods like `->exists()` for checking if any records exist (`> 0`) and `->count()` for specific size checks, preventing excessive memory usage and database load.
