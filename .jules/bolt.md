## 2024-11-04 - Optimize Collection Loading
**Learning:** Loading entire Eloquent collections into PHP memory just to access count or first/last elements causes severe memory bloat. Using DB queries instead reduces memory footprint.
**Action:** Use database-level methods like `->count()`, `->latest()->first()`, and `->oldest()->first()` on a cloned query builder instead of `->get()->toArray()` or array indexing.
