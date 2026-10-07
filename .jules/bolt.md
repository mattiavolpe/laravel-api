## 2024-10-07 - Optimize Eloquent Queries
**Learning:** Pulling entire Eloquent collections into memory just to count them or get the first/last elements is highly inefficient and can lead to memory exhaustion.
**Action:** Use database-level methods like `->count()`, `->exists()`, `->latest()->first()`, and `->oldest()->first()` to perform calculations directly at the database layer.
