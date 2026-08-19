## 2024-05-18 - Optimize Eloquent checks to prevent memory exhaustion
**Learning:** Checking for existence using `count(Model::where(...)->get()->toArray()) > 0` or count `> 1` pulls all matching records from the database into PHP memory as an array, which can lead to severe memory exhaustion or application crashes for large datasets.
**Action:** Always use `->exists()` for `> 0` existence checks, and `->count()` for specific count checks to ensure operations are performed efficiently directly at the database level.
