## 2024-04-12 - Optimize Database Exists and Count queries

**Learning:** Checking for record existence or counting records by fetching all data with `->get()->toArray()` and then running `count()` in PHP memory is very inefficient. It loads unnecessary data into RAM and creates larger payloads over the network to the database.

**Action:** Always use database-level methods `->exists()` and `->count()` directly on the Eloquent query builder. This executes an optimized SQL `EXISTS` or `COUNT()` query and minimizes memory usage in the application.
