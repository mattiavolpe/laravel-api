## 2024-05-23 - Avoid loading full collections into memory for first/last elements
**Learning:** Loading entire Eloquent collections into memory just to get the count, first, or last elements (e.g., `$collection[0]`) causes severe memory bloat and execution delays when the dataset is large.
**Action:** Use database-level queries like `->count()`, `->latest('id')->first()`, and `->oldest('id')->first()` to offload the work to the database and retrieve only the required data.
