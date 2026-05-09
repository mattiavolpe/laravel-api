## 2024-05-10 - Eloquent Collection Optimization
**Learning:** Avoid using `get()` and PHP's `count()` or array access when you only need aggregate values (like total count, newest, oldest). Loading all models into memory creates a severe performance bottleneck (memory exhaustion and slow hydration) when the table grows large.
**Action:** Always use database-level query builder methods like `->count()`, `->latest()->first()`, and `->oldest()->first()` to offload the work to the database and retrieve only the necessary data.
