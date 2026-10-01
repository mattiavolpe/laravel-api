## 2024-05-30 - Optimize count and existence checks in Eloquent
**Learning:** Avoid pulling records into PHP memory using \`count(Model::where(...)->get()->toArray())\` for counting or existence checks. It can lead to memory exhaustion.
**Action:** Instead, execute queries directly at the database level by using \`->exists()\` for \`> 0\` checks, and \`->count()\` for \`> 1\` specific count checks to optimize performance and prevent memory exhaustion.
