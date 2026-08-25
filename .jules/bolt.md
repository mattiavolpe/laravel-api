## 2024-10-24 - Inefficient Eloquent Counting
**Learning:** Checking existence or counting using \`count(Model::where(...)->get()->toArray())\` is a major performance bottleneck, pulling all matching records into PHP memory and executing slow array conversions.
**Action:** Always use database-level aggregations like \`->exists()\` for \`> 0\` checks and \`->count()\` for specific numeric checks to minimize memory usage and query execution time.
