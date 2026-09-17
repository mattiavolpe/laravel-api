## 2024-05-18 - Optimize Eloquent Exists/Count Queries
**Learning:** Using \`count(Model::where(...)->get()->toArray())\` pulls all matching records into PHP memory, causing significant overhead.
**Action:** Execute queries directly at the database level using \`->exists()\` for \`> 0\` checks and \`->count()\` for specific count checks to optimize performance and prevent memory exhaustion.
