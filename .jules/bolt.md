## 2024-05-24 - Database Query Optimization
**Learning:** Avoid loading entire collections into PHP memory using \`count(Model::where(...)->get()->toArray())\` for counting or existence checks.
**Action:** Execute queries directly at the database level by using \`->exists()\` for \`> 0\` checks, and \`->count()\` for \`> 1\` specific count checks to optimize performance and prevent memory exhaustion.
