## 2024-05-18 - Eloquent Memory Exhaustion Pattern
**Learning:** Found a pattern where developers were using `count(Model::where(...)->get()->toArray())` to check for existence or count records. This pulls all matching records into PHP memory as collections and then converts them to arrays, causing massive performance and memory overhead for large tables.
**Action:** Always replace this pattern with database-level queries: `->exists()` for `> 0` checks and `->count()` for specific numeric checks to offload the work to the database and prevent memory exhaustion.
