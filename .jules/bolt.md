## 2024-05-15 - Eloquent Collection Memory Anti-Pattern
**Learning:** The codebase has a pattern of loading entire Eloquent collections into memory (e.g., `->get()`) just to perform basic operations like counting or accessing the first/last elements. This can cause severe memory bloat and slow down requests when users have many records.
**Action:** Always replace memory-level collection operations with database-level queries (`->count()`, `->latest()->first()`, `->oldest()->first()`, etc.) to minimize PHP memory consumption and execution time.
