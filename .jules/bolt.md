## 2024-05-24 - Optimize Eloquent Exists/Count
**Learning:** Pulling records into PHP memory using count(Model::where(...)->get()->toArray()) for counting or existence checks causes unnecessary memory consumption and query overhead in Laravel.
**Action:** Always use database-level queries like ->exists() for > 0 checks and ->count() for specific count checks to avoid loading entire collections into PHP memory.
