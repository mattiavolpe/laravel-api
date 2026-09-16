## 2024-05-18 - Avoid loading full collections into memory for aggregations
**Learning:** In Laravel/Eloquent, calling `->get()` and then doing array/collection operations like `count()` or index access (`$projects[0]`) loads all records into PHP memory, causing performance and memory bottlenecks when data grows.
**Action:** Always use database-level aggregations and limits (e.g., `->count()`, `->latest()->first()`) instead of retrieving full collections and processing them in PHP memory.
