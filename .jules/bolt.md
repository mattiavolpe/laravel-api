## 2024-11-09 - Eloquent Collection Memory Anti-Pattern
**Learning:** The codebase has an anti-pattern of loading entire Eloquent collections into PHP memory just to access aggregate states (like first/last elements or count), which can lead to memory exhaustion as the dataset grows.
**Action:** Use database-level queries like `->latest('id')->first()`, `->oldest('id')->first()`, and `->count()` instead of array access on collections. When executing multiple terminating methods on a shared query builder, always use `(clone $query)` to prevent mutating the builder state.
