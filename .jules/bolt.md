## 2024-03-24 - Eloquent Memory Exhaustion Anti-pattern
**Learning:** The codebase has a recurring anti-pattern of using `count(Model::where(...)->get()->toArray())` for existence and threshold checks. This pulls the entire result set into PHP memory, causing significant performance degradation and potential memory exhaustion on large tables.
**Action:** Use database-level aggregation methods like `->exists()` for `> 0` checks and `->count()` for specific threshold comparisons to keep the processing load on the database engine.

## 2024-03-24 - Eloquent Collection Array Access
**Learning:** The `DashboardController` was loading the entire `projects` collection into PHP memory just to count them and get the first and last items.
**Action:** Replace `->get()` and array access (`$projects[0]`, `$projects[$totalProjects - 1]`) with database-level queries (`->count()`, `->latest('id')->first()`, `->oldest('id')->first()`) and clone the base query to avoid mutating state.
