## 2024-04-25 - Inefficient in-memory counting instead of DB queries
**Learning:** Checking for record existence using `count(Model::where(...)->get()->toArray())` is an anti-pattern that inefficiently loads all matching records into PHP memory and converts them to an array before counting them. This can cause high memory usage and slow down requests when the table is large.
**Action:** Always use the database layer to perform counts and existence checks. Use `->exists()` for simple existence checks and `->count()` when the exact number of matching records is needed.
