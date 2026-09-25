## 2024-05-15 - Optimize Eloquent checks by replacing get()->toArray() with exists() and count()
**Learning:** Found multiple instances where entire Eloquent collections were being loaded into memory using `->get()->toArray()` just to count records or check if any exist. This is a severe O(N) memory bottleneck for counting.
**Action:** Always execute count and existence checks directly at the database level using `->exists()` and `->count()` instead of loading collections into PHP memory.
