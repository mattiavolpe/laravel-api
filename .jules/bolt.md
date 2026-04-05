## 2024-04-05 - Inefficient database queries checking for existence

**Learning:** Checking for record existence using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into memory as eloquent models, converts them to an array, and then counts them in PHP. This uses significantly more memory and processing time than a direct database count or exists query.

**Action:** Replace `count(Model::where(...)->get()->toArray()) > 0` with `Model::where(...)->exists()` and `count(Model::where(...)->get()->toArray()) > 1` with `Model::where(...)->count() > 1` for database-level execution.
