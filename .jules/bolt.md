## 2024-04-03 - [Avoid get()->toArray() for counting]
**Learning:** Checking for model existence using `count(Model::where(...)->get()->toArray()) > 0` loads all matching records into memory and then counts them in PHP. This is highly inefficient and uses a lot of memory, especially for large tables.
**Action:** Always use `exists()` for checking if any records match a condition, or `count()` on the query builder to perform the count at the database level.
