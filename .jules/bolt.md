## 2024-07-25 - Prevent In-Memory Filtering in Eloquent Models
**Learning:** Found multiple instances where the application fetched entire tables into PHP memory (using `->get()->toArray()`) just to perform basic row counting or existence checks. This architectural anti-pattern rapidly causes out-of-memory errors and degrades database performance as tables grow.
**Action:** Always utilize native database aggregations (`->exists()` instead of `count(...) > 0` and `->count()` instead of `count(...) > 1`) directly on the Eloquent Query Builder instead of evaluating counts post-retrieval in PHP.
