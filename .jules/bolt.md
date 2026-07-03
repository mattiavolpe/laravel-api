## 2024-07-03 - [Inefficient Eloquent Existence Checks]
**Learning:** The codebase was pulling entire collections into memory and converting them to arrays just to check for existence using `count(Model::where(...)->get()->toArray()) > 0`. This causes massive memory overhead and slow query execution since all matched rows are hydrated into PHP.
**Action:** Replace all instances of `count(Model::where(...)->get()->toArray()) > 0` with `Model::where(...)->exists()` and `> 1` with `Model::where(...)->count() > 1` to push the counting to the database layer, avoiding PHP memory exhaustion.
