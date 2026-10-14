## 2024-05-24 - Optimize Eloquent Exists/Count
**Learning:** Avoid pulling records into PHP memory using \`count(Model::where(...)->get()->toArray())\` for counting or existence checks, as this causes memory exhaustion on large datasets.
**Action:** Execute queries directly at the database level by using \`->exists()\` for \`> 0\` checks, and \`->count()\` for \`> 1\` specific count checks.
