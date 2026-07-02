## 2024-07-02 - Eloquent Memory Exhaustion Check
**Learning:** In Laravel/Eloquent, checking for existence or specific counts by pulling records into memory via `->get()->toArray()` (e.g., `count(Model::where(...)->get()->toArray()) > 0`) is highly inefficient and risks memory exhaustion for large datasets.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for `> 1` specific count checks to optimize performance and prevent pulling models into memory.
