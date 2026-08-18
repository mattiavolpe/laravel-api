## 2024-05-24 - Eloquent Memory Exhaustion Pattern
**Learning:** The codebase relies on fetching entire collections into memory `count(Model::where(...)->get()->toArray())` for simple existence and count checks, which causes N+1 memory issues and potential OOM errors for large datasets.
**Action:** Always use `->exists()` for `> 0` existence checks and `->count()` for specific count threshold checks to execute directly at the database level.
