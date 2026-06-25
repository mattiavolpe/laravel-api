## 2026-06-25 - [Optimize Eloquent database checks]
**Learning:** Using `count(Model::where(...)->get()->toArray())` pulls all matching records into PHP memory to count them, causing massive memory spikes and potential crashes as the table grows.
**Action:** Execute queries directly at the database level using `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and prevent memory exhaustion.
