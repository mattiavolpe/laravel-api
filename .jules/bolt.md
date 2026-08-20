## 2024-05-24 - Optimize Eloquent checks
**Learning:** In Laravel/Eloquent, using `count(Model::where(...)->get()->toArray())` for counting or existence checks pulls all matching records into PHP memory, which is inefficient and can lead to memory exhaustion.
**Action:** Use `->exists()` for checking if any records exist (equivalent to `> 0`), and `->count()` for checking exact counts (equivalent to `> 1`), to execute queries directly at the database level.
