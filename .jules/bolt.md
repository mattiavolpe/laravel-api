## 2024-07-16 - Prevent Memory Exhaustion via Eloquent Exists/Count
**Learning:** Checking for row existence or counting results using `count(Model::where(...)->get()->toArray())` is a severe performance anti-pattern. This fetches all matching records from the database, loads them into PHP memory as objects, and then counts them in application code.
**Action:** Always optimize by executing queries directly at the database level. Replace `.get()->toArray()) > 0` checks with `->exists()` and specific count checks with `->count()`.
