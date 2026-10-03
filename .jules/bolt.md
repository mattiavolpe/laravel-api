## 2024-10-03 - Optimize Eloquent queries to avoid loading entire collections into PHP memory
**Learning:** Pulling all records with `->get()` just to access the first and last elements or to count them causes unnecessary memory consumption and slower execution. Additionally, when using a shared query builder, mutating its state (e.g., using `latest()`) affects subsequent calls.
**Action:** Use database-level terminating methods like `->count()`, `->latest()->first()`, and `->oldest()->first()`, and use `(clone $query)` to prevent the base builder state from being mutated by these clauses.
