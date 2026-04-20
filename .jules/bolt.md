## 2024-05-24 - Optimize Eloquent Existence Checks
**Learning:** Checking model existence via `count(Model::where(...)->get()->toArray())` is a major anti-pattern in this codebase, loading all records into PHP memory instead of leveraging database aggregation.
**Action:** Always use `->exists()` or `->count()` directly on the Eloquent query builder for efficient existence or quantity checks.
