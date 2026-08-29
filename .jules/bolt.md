## 2024-05-18 - Optimize DashboardController Memory Consumption
**Learning:** Loading entire collections into PHP memory using `->get()` just to count them or access the first/last elements causes significant memory exhaustion, especially for users with many records.
**Action:** Always use database-level queries like `->count()`, `->latest('id')->first()`, and `->oldest('id')->first()` to retrieve only the necessary scalar values or single records, minimizing PHP memory footprint and execution time.
