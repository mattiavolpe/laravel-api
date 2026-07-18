## 2024-07-18 - Optimize Database Checks
**Learning:** The codebase previously used `count(Model::where(...)->get()->toArray())` for counting or existence checks. This pattern fetches full records into PHP memory, hydrates them into Eloquent models, and then converts them to an array, which causes unnecessary overhead and potential memory exhaustion.
**Action:** Always use `->exists()` for `> 0` checks and `->count()` for specific count checks (like `> 1`) to execute queries directly at the database level and avoid hydrating models into memory.
