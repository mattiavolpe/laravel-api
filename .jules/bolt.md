## 2024-05-19 - Inefficient Eloquent Count
**Learning:** Found a major bottleneck in Laravel controllers: `count(Model::where(...)->get()->toArray())` was being used to check existence/count. This pulls the entire dataset into PHP memory, which is catastrophic for large tables.
**Action:** Always use `$query->exists()` to check if any records match, and `$query->count()` to get the total number of matches directly from the database without hydrating models.
