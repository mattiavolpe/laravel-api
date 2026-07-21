## 2024-07-21 - Optimize Eloquent existence checks
**Learning:** Using count() on a collection retrieved via get()->toArray() pulls all records into PHP memory, causing performance and memory exhaustion issues.
**Action:** Always execute existence or count checks directly at the database level using ->exists() or ->count() on the Eloquent query builder.
