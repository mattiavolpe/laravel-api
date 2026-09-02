## 2024-09-02 - Eloquent Collection Memory Exhaustion
**Learning:** Loading entire Eloquent collections into PHP memory using `->get()` just to count records or access the first/last elements causes severe performance bottlenecks and memory exhaustion as tables grow.
**Action:** Always use database-level queries like `->count()`, `->latest('id')->first()`, and `->oldest('id')->first()` to perform these operations efficiently at the database level instead of in PHP.
