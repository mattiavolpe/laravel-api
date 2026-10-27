## 2024-05-23 - Optimize Eloquent collection loading
**Learning:** Using count(Model::get()->toArray()) or fetching an entire collection just to access the first/last items consumes excessive PHP memory and processing time.
**Action:** Always use database-level methods like ->exists(), ->count(), ->latest()->first(), and ->oldest()->first() to offload work to the database engine.
