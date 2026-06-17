## 2024-05-18 - Avoid loading all records to count them in Eloquent

**Learning:** I found multiple places in `TechnologyController`, `TypeController`, and `ProjectController` where records were being counted using `count(Model::where(...)->get()->toArray())`. This is an N+1/memory issue because `get()->toArray()` loads all matching rows into PHP memory and builds an array, just to count the result.
**Action:** When we only need to know if a record exists or count it, we should use the database-level query builder methods `->exists()` or `->count()`.