## 2024-05-13 - [Optimize Eloquent query memory usage]
**Learning:** Checking for count/existence by loading whole relations with `count(Model::where(...)->get()->toArray())` consumes excessive memory and slows down execution. For finding first and last elements, fetching all records with `get()` and taking array index uses unnecessary memory.
**Action:** Use database-level functions like `exists()`, `count()`, `latest()->first()` and `oldest()->first()` to offload memory consumption and processing overhead.
