## 2024-07-12 - Inefficient Eloquent Count/Existence Checks
**Learning:** Checking for record existence by loading all matching records into memory via `->get()->toArray()` and then running `count()` leads to memory exhaustion and severe performance bottlenecks.
**Action:** Always use database-level methods like `->exists()` for existence checks and `->count()` for counting to keep the heavy lifting on the database side and conserve PHP memory.
